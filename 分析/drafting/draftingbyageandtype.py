import numpy as np
import pymysql
import matplotlib
import matplotlib.pyplot as plt
from pylab import savefig
import os
import calendar
import datetime
from DictTransform import *
from tkinter import _flatten
# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象

# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()


cursor.execute("SELECT member_search_record.account,year(FROM_DAYS(DATEDIFF(NOW(),member.birthday)) ),vtype.vtype_name FROM testdb1.member_search_record  left join video on video.video_id=member_search_record.video_id  left join vtype_record on vtype_record.video_id=video.video_id  left join vtype on vtype.vtype_id=vtype_record.vtype_id  left join member on member.account=member_search_record.account left join area on area.area_id=video.area_id")
searchlist = cursor.fetchall()
allList=[]
usersearchtypelist=[]
for x in searchlist:
    allList += [x]
    usersearchtypelist+=[x[2]]
print(allList)
print(usersearchtypelist)



cursor.execute("SELECT vtype_name FROM testdb1.vtype")
vytypeList = cursor.fetchall()
typeList=[]
for x in vytypeList:
    typeList += (x)
typeList = list( set( typeList ) )
print(typeList)




finaldict={}
for k, v in listToDict(allList,key=1,value=[2]).items():
    finalkey=k
    typeDict = { k:0 for k in typeList }
    for x in v:
      typeDict[x] += 1
    sort_type=sorted(typeDict.items(),key=lambda x:x[0],reverse=True)
    for i in sort_type:
      finaldict[finalkey]=sort_type
print(finaldict)



sort_typelist=sorted(typeList,key=lambda x:x[0],reverse=True)
print(sort_typelist)




kidfinaldict={}
for i in range(10):
    try:
        kidfinaldict=finaldict[i]
    except:
        continue
print(kidfinaldict)

teenfinaldict={}
for i in range(11,20):
    try:
        teenfinaldict=finaldict[i]
    except:
        continue
print(teenfinaldict)

adultfinaldict={}
for i in range(21,30):
    try:
        adultfinaldict=finaldict[i]
    except:
        continue
print(adultfinaldict)

middleagefinaldict={}
for i in range(31,100):
    try:
        middleagefinaldict=finaldict[i]
    except:
        continue
print(middleagefinaldict)



finkidfinaldict={}
finkidfinallist=[]
finkidfinaldict=listToDict(kidfinaldict,key=0,value=[1]).values()
finkidfinallist+=finkidfinaldict
finkidfinallist=list(_flatten(finkidfinallist))
print(finkidfinallist)

finteenfinaldict={} 
finteenfinallist=[]
finteenfinaldict=listToDict(teenfinaldict,key=0,value=[1]).values()
finteenfinallist+=finteenfinaldict
finteenfinallist=list(_flatten(finteenfinallist))
print(finteenfinallist)

finadultfinaldict={}
finadultfinallist=[]
finadultfinaldict=listToDict(adultfinaldict,key=0,value=[1]).values()
finadultfinallist+=finadultfinaldict
finadultfinallist=list(_flatten(finadultfinallist))
print(finadultfinallist)

finmiddleagefinaldict={}
finmiddleagefinallist=[]
finmiddleagefinaldict=listToDict(middleagefinaldict,key=0,value=[1]).values()
finmiddleagefinallist+=finmiddleagefinaldict
finmiddleagefinallist=list(_flatten(finmiddleagefinallist))
print(finmiddleagefinallist)
    

    
plt.rcParams['font.sans-serif'] = ['Taipei Sans TC Beta']

ind = np.arange(len(typeList))  # the x locations for the groups 
width = 0.2  # the width of the bars
fig, ax = plt.subplots(figsize=[16,8])



ax.bar( ind - width*2, finkidfinallist ,  label="幼兒 0~10", align = "edge", width = width,color=['lightsteelblue'])

ax.bar( ind - width*1, finteenfinallist ,  label="青少年 11~20", align = "edge", width = width,color=['royalblue'])

ax.bar( ind + width*0, finadultfinallist ,  label="壯年 21~30", align = "edge", width = width,color=['blue'])

ax.bar( ind + width*1, finmiddleagefinallist,  label="中年以上 30~" , align = "edge", width = width,color=['midnightblue'])

plt.legend()
ax.set_xlabel('type')
ax.set_ylabel('search time')
ax.set_title('age & type')
ax.set_xticks(ind)
ax.set_xticklabels(sort_typelist)
plt.xticks(rotation=90)
fig = plt.gcf()
fig.savefig('E:\\age & type.png', dpi=100)
plt.show()



mydb.close()    



