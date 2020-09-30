import numpy as np
import pymysql
import matplotlib.pyplot as plt
from matplotlib.pyplot import savefig 
import os
import calendar
import datetime
# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
mydb = pymysql.connect("127.0.0.1", "root", "password", "new_schema1")
# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()


cursor.execute("SELECT account,  search_time FROM new_schema1.member_search_record")
clicklist = cursor.fetchall()
timeList=[]
for x in clicklist:
    timeList += [x[1].strftime("%Y/%m/%d %H:00:00")]
#  print(x[1].strftime("%Y/%m/%d %H:00:00"))
 


tempDict = {}

for x in timeList:
 key = x[:13] + ':00:00'

 if key in tempDict:
  tempDict[key] += 1
 else:
  tempDict[key] = 1

print(tempDict)

dtList = [ datetime.datetime.strptime(x, '%Y/%m/%d %H:%M:%S') for x in timeList ]

start, end = min( dtList ), max( dtList )

timeGap = ( max( dtList ) - min( dtList ) )

date_generated = [ datetime.datetime.strftime(start + datetime.timedelta(hours=1) * x, '%Y/%m/%d %H:%M:%S' ) for x in range(0, timeGap.days*24 + timeGap.seconds//3600)]

for x in date_generated:
    if x not in tempDict:
        tempDict[x] = 0
sorted(tempDict,  key = lambda x : x[0])
print(tempDict)
  
time, num = list(zip(*tempDict.items()))

print( time, num )



plt.bar(time,num,)   

plt.yticks(np.arange(min(num), max(num)+1, 1.0))
plt.xticks(rotation=90)
plt.savefig("123.png")
plt.show()

          
mydb.close()    
