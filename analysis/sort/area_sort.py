import numpy as np
import pymysql
import matplotlib.pyplot as plt
import os
import calendar
import datetime
from DictTransform import *


# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象

# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()


cursor.execute("SELECT account FROM testdb1.member_search_record")
clicklist = cursor.fetchall()
userList=[]
for x in clicklist: 
  userList.append(x[0])
  
# print (userList)

userfinish={}

for x in userList:
 userfinishkey = x

 if userfinishkey not in userfinish:
  userfinish[userfinishkey] = [x]
 

# print(userfinish)


cursor.execute("SELECT member_search_record.account,member_search_record.video_id,video.video_name,area.area_name FROM testdb1.member_search_record  left join video on video.video_id=member_search_record.video_id  left join vtype_record on vtype_record.video_id=video.video_id  left join area on video.area_id=area.area_id where search_time between  (SELECT DATE_ADD(now(),INTERVAL -1 MONTH)) and now()")
searchlist = cursor.fetchall()
allList=[]
usersearcharealist=[]
for x in searchlist:
    allList += [x]
    usersearcharealist+=[x[3]]
print(allList)
print(usersearcharealist)

cursor.execute("SELECT area_name FROM testdb1.area")
unareaList = cursor.fetchall()
areaList=[]
for x in unareaList:
    areaList += (x)
areaList = list( set( areaList ) )
# print(areaList)


# print(listToDict(allList,key=0,value=[4]))


finaldict={}
for k, v in listToDict(allList,key=0,value=[3]).items():
    finalkey=k
    areaDict = { k:0 for k in areaList }
    for x in v:
      try:
            areaDict[x] += 1
      except KeyError:
            print("")
    sort_area=sorted(areaDict.items(),key=lambda x:x[1],reverse=True)
    for i in sort_area:
      # print(k,i[0],i[1]) 
      finaldict[finalkey]=sort_area[:3]
print(finaldict)

# ------------------------------------------------------------------------------------
for k, v in finaldict.items():  

  # 插入一條記錄
    sql = "SELECT  *  FROM  testdb1.area_sort where  account = '{}' ;".format(k)
    try:
        print( 'sql execute start' )
        cursor.execute(sql)
        print( 'sql execute end' )    
        mydb.commit()
        print( 'mydb commit end' )
        row = cursor.fetchone()
        print( 'get row' )  
        if row is not None:
            print( "DELETE FROM testdb1.area_sort WHERE account=%s")
            val = (k)
            cursor.execute("DELETE FROM testdb1.area_sort WHERE account=%s",val)
            mydb.commit()
            print('')
    except Exception as e:
      print(e)

      mydb.rollback()       


# ------------------------------------------------------------------------------------
for k, v in finaldict.items():  

  # 插入一條記錄
    sql = "SELECT  *  FROM  testdb1.area_sort where  account = '{}' ;".format(k)
    try:
        print( 'sql execute start' )
        cursor.execute(sql)
        print( 'sql execute end' )    
        mydb.commit()
        print( 'mydb commit end' )
        row = cursor.fetchone()
        print( 'get row' )  

        for x in v:
          print( "insert into testdb1.area_sort (account,area_name,sort) values (%s, %s,%s")
          val = (k,x[0],x[1])
          cursor.execute("insert into testdb1.area_sort (account,area_name,sort) values (%s, %s,%s)",val)
          mydb.commit()
          print('成功新增資料')
    except Exception as e:
      print(e)

      mydb.rollback()     
        
      

       
mydb.close()   