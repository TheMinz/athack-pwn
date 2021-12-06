#!/usr/bin/env python3

from Crypto.Util.number import bytes_to_long, long_to_bytes, getPrime
from secret import FLAG, BITS

m = bytes_to_long(FLAG)
p, q, r = getPrime(BITS), getPrime(BITS), getPrime(BITS)
n = p * q * r
e = 0x10001

with open('output.bin', 'wb') as h:
    c = pow(m,e*3,n)
    h.write(long_to_bytes(c))

print(n) # 2878484237144058957039174874624090770599900489784647154744423901387428048184111906123929155824159
print(c)

