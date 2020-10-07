import requests
from lxml import etree
import re
import pymongo
import time
from bs4 import BeautifulSoup


client = pymongo.MongoClient('localhost', 27017)
test = client['test']
video = test['video']
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'
}
def get_movie_url(url):
    html = requests.get(url,headers=headers)
    selector = etree.HTML(html.text)
    movie_hrefs = selector.xpath('//div[@class="hd"]/a/@href')
    for movie_href in movie_hrefs:
        get_movie_info(movie_href)
def get_movie_info(url):
    html = requests.get(url,headers=headers)
    soup = BeautifulSoup(html.text, 'lxml')
 
    div_info = soup.find( id='info' )
    div_info1 = soup.find( id='hot-comments' )
    selector = etree.HTML(html.text)
    video_time=[]
    director=[]
    actor=[]
    screemwriter=[]
    info_items = div_info.find_all( 'span', recursive=False )
    comment=[]
    image=""

    try:
        video_name = selector.xpath('//*[@id="content"]/h1/span[1]/text()')
        # director = info_items[0].find( 'span', class_ = 'attrs' ).find( 'a' ).text
        for d in info_items[0].find_all( 'span', class_ = 'attrs' ):
            director.append( d.text )
        #screemwriter = info_items[1].find( 'span', class_ = 'attrs' ).find( 'a' ).text
        for s in info_items[1].find_all( 'span', class_ = 'attrs' ):
            screemwriter.append( s.text )
        # actor = info_items[2].find( 'span', class_ = 'attrs' ).find( 'a' ).text            
        for a in info_items[2].find_all( 'span', class_ = 'attrs' ):
            actor.append( a.text )
        type = re.findall('<span property="v:genre">(.*?)</span>',html.text,re.S)
        score = re.findall('<strong class="ll rating_num" property="v:average">(.*?)</strong>',html.text,re.S)
        plot = re.findall('<span property="v:summary" class="">(.*?)</span>',html.text,re.S)
        area = re.findall('制片国家/地区:</span>(.*?)<br/>',html.text,re.S)
        # video_time = re.findall('上映日期:</span>(.*?)<br/>',div_info.text,re.S)
        link = url
        for i in div_info.find_all( 'span', property = "v:initialReleaseDate" ):
            video_time.append( i.text )

        content_childs = div_info1.find_all( 'div', class_ = 'comment-item' )
        num = min( len(content_childs), 5 )
        for i in range(num):
            comment.append(content_childs[i].find(class_ = 'comment' ).find( 'span', class_ = 'short' ).text.strip())

        image=soup.find('img')['src']
        
        

        print( video_name )

    except IndexError:
        pass
    info = {
        'video_name': video_name,
        'director': director,
        'screemwriter': screemwriter,
        'actor': actor,
        'type': type,
        'score': score,
        'plot': plot,
        'area': area,
        'time': '/'.join( video_time ),
        'comment':comment,
        'image':image,
        'link':link
    }
    print(image)
 
    video.insert_one(info)
if __name__ =='__main__':
        urls = ['https://movie.douban.com/top250?start={}&filter='.format(str(i)) for i in range(0,250,25)]
        for url in urls:
            get_movie_url(url)
        time.sleep(2)
 
 



