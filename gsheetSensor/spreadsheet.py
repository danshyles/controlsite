import gspread
from oauth2client.service_account import ServiceAccountCredentials
import pprint, time
import datetime

scope = ['https://spreadsheets.google.com/feeds',
         'https://www.googleapis.com/auth/drive']

credentials = ServiceAccountCredentials.from_json_keyfile_name('2020 Science Fair-4bd3d449e5d1.json', scope)

gc = gspread.authorize(credentials)

wks = gc.open("science fair 2020").sheet1

pp = pprint.PrettyPrinter()
get_value = wks.get_all_values()

# define value to insert in what point

# count number
count1 = 1
count2 = 1
count3 = 1
count4 = 1
def countrow3():
    global count4
    count4 += 1
    return count4
def countrow2():
    global count3
    count3 += 1
    return count3
def countrow():
    global count1
    count1 += 1
    return count1
def countcolumn():
    global count2
    count2 +=1
    return count2

# insert in point
while True:
    row1 = countrow()
    row2 = countrow2()
    row3 = countrow3()
    col3 = 4
    col1 = 1
    col2 = 2
    value1 = 'test value1'
    value2 = 'test value2'
    wks.update_cell(row1,col1,value1)
    wks.update_cell(row2,col2,value2)
    wks.update_cell(row3, col3, datetime.datetime.now().isoformat())


