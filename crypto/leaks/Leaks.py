from Crypto.Util.number import getPrime, bytes_to_long

while True:
		try:
			p = getPrime(512)
			q = getPrime(512)
			N = p*q
			phi = (p-1)*(q-1)
			e = 17
			d = pow(e,-1,phi)
			break
		except:
			continue


d0 = int(bin(d)[677:],2)
dx = int(bin(d)[677:],2).bit_length()
dn = 1024


flag = "AtHackCTF{32-hex}"
part1 = flag[0:22]
part2 = flag[22:]


m1 = ''.join(format(ord(i), '08b') for i in part1)
t1 = len(part1)

cipher1 = []
x1 = secret1

for i in range(t1):
    mi = m1[i * 8:(i + 1) * 8]
    new_x = pow(x1, 2, p)
    pi = bin(new_x)[-8:]

    mi_int = int(mi, 2)
    pi_int = int(pi, 2)
    ci = pi_int ^ mi_int

    cipher1.append(ci)
    x1 = new_x

cipher1.append(x1)
print(cipher1)


m2 = ''.join(format(ord(i), '08b') for i in part2)
t2 = len(part2)

cipher2 = []
x2 = secret2

for i in range(t2):
    mi = m2[i * 8:(i + 1) * 8]
    new_x = pow(x2, 2, q)
    pi = bin(new_x)[-8:]

    mi_int = int(mi, 2)
    pi_int = int(pi, 2)
    ci = pi_int ^ mi_int

    cipher2.append(ci)
    x2 = new_x

cipher2.append(x2)
print(cipher2)
