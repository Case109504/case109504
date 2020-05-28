import requests
import time
import random
from bs4 import BeautifulSoup

base_link = [ 'https://list.tw.iqiyi.com/www/2/-------------11-', '-1---.html' ]

video_links = []

Dict = {}

max_page = 1

for i in range( 1, max_page+1 ):
    r = requests.get( base_link[0] + str( i ) + base_link[1] )

    if ( r.status_code == requests.codes.ok ):
        soup = BeautifulSoup( r.text, 'lxml' )

        pList = soup.find( id = 'twVideoListWrap' ).find_all( 'div', class_='plist-item' )

        for p in pList:
            a = p.find( 'a', class_ = 'tw-list-link' )
            video_links.append( 'https:' + a['href'] )
        
    print( f'progress: {i}/{max_page}' )


for i, link in enumerate( video_links ):
    r = requests.get( link )

    if ( r.status_code == requests.codes.ok ):
        soup = BeautifulSoup( r.text, 'lxml' )
        content_childs = soup.find( 'div', class_ = 'content-right' ).find_all( 'div' )


        drama_name = soup.find( 'span', class_ = 'drama-name' ).text.strip()
        
        director = content_childs[-4].find( 'a' ).text.strip()

        actors = []
        for actor in content_childs[-3].find_all( 'span' ):
            actors.append( actor.find( 'a' ).text.strip() )

        info = content_childs[-1].text
        if not info.find( '：' ) == -1:
            info = info.split( '：', 1 )[1].strip()

        Dict[drama_name] = ( director, actors, link, info )
        time.sleep( random.random() * 0.5 + 0.5 )
    
    print( f'data process: {i+1}/{len(video_links)}' )


with open( 'test.txt', mode='w', encoding='utf-8' ) as f:
    for v, k in Dict.items():
        f.write( v + ' : \n' + k[0] + '\n' + ' , '.join( k[1] ) + '\n' + k[2] + '\n' + k[3] + '\n' )

print( 'Done!' )