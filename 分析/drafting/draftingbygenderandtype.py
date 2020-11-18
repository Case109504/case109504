import numpy as np
import pymysql
import matplotlib.pyplot as plt
from pylab import savefig
import os
import calendar
import datetime
from DictTransform import *

# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
mydb = pymysql.connect("140.131.115.87", "root", "109504109504", "testdb1")
# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()


cursor.execute("SELECT member_search_record.account,member.gender,vtype.vtype_name FROM testdb1.member_search_record  left join video on video.video_id=member_search_record.video_id  left join vtype_record on vtype_record.video_id=video.video_id  left join vtype on vtype.vtype_id=vtype_record.vtype_id  left join member on member.account=member_search_record.account")
searchlist = cursor.fetchall()
allList=[]
for x in searchlist:
    allList += [x]
print(allList)


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
      finaldict[finalkey]=typeDict
print(finaldict)

malefinaldict={}
malefinaldict=finaldict['男']
print(malefinaldict)

femalefinaldict={}
femalefinaldict=finaldict['女']
print(femalefinaldict)

plt.rcParams['font.sans-serif'] = ['Taipei Sans TC Beta']
my_labels = {"x1" : "女", "x2" : "男"}
plt.figure( figsize=( 16 , 8 ) )

for k, v in femalefinaldict.items():
    plt.bar( k, v ,  label=my_labels["x1"], align = "edge", width = 0.35, color=['red'])
    my_labels["x1"] = "_nolegend_"

for k, v in malefinaldict.items():
    plt.bar( k, v ,  label=my_labels["x2"], align = "edge", width = -0.35, color=['blue'])
    my_labels["x2"] = "_nolegend_"


plt.legend(bbox_to_anchor=(1.0, 1.0))
plt.xticks(rotation=90)
plt.title( ' gender & type' )
plt.xlabel( 'type' )
plt.ylabel( 'search time' )
plt.margins( x = 0, y = 0 )
fig = plt.gcf()
fig.savefig('case109504\test3\images\gender & type.png', dpi=100)
plt.show()




          
mydb.close()    



