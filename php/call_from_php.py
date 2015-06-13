# file name: call_from_php.py
# coding: UTF-8

import sys

malenum = int(sys.argv[1])
femalenum = int(sys.argv[2])
m_single = []
f_single = []
married = {}
mprefer = [[None for col in range(femalenum)] for row in range(malenum)]
fprefer = [[None for col in range(malenum)] for row in range(femalenum)]
counter = 3
for i in range(malenum):
    for j in range(femalenum):
        mprefer[i][j] = int(sys.argv[counter])
        counter += 1
for i in range(femalenum):
    for j in range(malenum):
        fprefer[i][j] = int(sys.argv[counter])
        counter += 1

if __name__=='__main__':
    for i in range(malenum):
        m_single.append(i)
    for i in range(femalenum):
        f_single.append(i)
    while True:
        for i in range(malenum):
            if i in m_single:
                counter = 0
                while True:
                    if counter >= len(mprefer[i]):
                        m_single.remove(i)
                        married.update({i+1: 0})
                        break
                    femaleid = mprefer[i][counter]-1
                    if femaleid < 0:
                        m_single.remove(i)
                        married.update({i+1: 0})
                        break
                    if femaleid in f_single:
                        if i+1 in fprefer[femaleid]:
                            m_single.remove(i)
                            f_single.remove(femaleid)
                            married.update({femaleid+malenum+1: i+1})
                            married.update({i+1: femaleid+malenum+1})
                            break
                        else:
                            counter += 1
                    elif i+1 in fprefer[femaleid]:
                        if fprefer[femaleid].index(married[femaleid+malenum+1]) > fprefer[femaleid].index(i+1):
                            m_single.append(married[femaleid+malenum+1]-1)
                            m_single.remove(i)
                            married.update({married[femaleid+malenum+1]: 0})
                            married.update({femaleid+malenum+1: i+1})
                            married.update({i+1: femaleid+malenum+1})
                            break
                        else:
                            counter += 1
                    else:
                        counter += 1
        if len(m_single) == 0:
            for j in range(femalenum):
                if j in f_single:
                    f_single.remove(j)
                    married.update({j+malenum+1: 0})
            break
    married = married.items()
    for (i, j) in married:
        if i <= malenum:
            if j != 0:
                j = j - malenum
                print "男性No.%sは女性No.%sと結ばれました。" % (i, j)
            else:
                print "男性No.%sは結婚できませんでした。" % (i)
        else:
            if j != 0:
                i = i - malenum
                print "女性No.%sは男性No.%sと結ばれました。" % (i, j)
            else:
                print "女性No.%sは結婚できませんでした。" % (i)
