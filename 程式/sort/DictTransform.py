def listToDict( list_transform, key = 0, value=-1 ):

    isOdd = False

    if value == -1:
        value = list( range( len( list_transform )+1 ) )
    elif type( value ) == int:
        value = [ value ]
    
    if len(value) == 1:
        isOdd = True

    output = {}

    for x in list_transform:
        
        k = x[ key ]

        if k not in output:
            output[k] = []

        if isOdd:
            output[k].append( x[value[0]] )
        else:
            output[k].append( tuple( [ x[i] for i in value ] ) )

    return output

def zipDictToLists( dict_transform ):
    return list(zip(*dict_transform.items()))