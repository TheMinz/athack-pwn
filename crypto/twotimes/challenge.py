#!/usr/bin/env python3
#crypto A cryptanalyst lost his secrets while testing a very strong technique for encrypting messages. He thought his idea is secure enough "to protect him from the bad guys". Can you retrieve his secrets and read the flag? Guess the wrong part!
#from secret import secret_key, FLAG, message
def encrypt(secret, msg):
    assert len(secret) == len(msg)
    ciphertext = b''
    for s, m in zip(secret, msg):
        ciphertext += bytes([s ^ m])
    return ciphertext.hex()

#enc_flag = encrypt(secret_key, FLAG)
#enc_msg = encrypt(secret_key, message)
#print(f'{enc_flag=}') # 5d7a4f8cf10153da970055aea24c7ca39a0c599f02ecb59c18f596fb33a2050238aa181cc8c6d07aa7ba390539ba
#print(f'{enc_msg=}') #  55296acdfa0f62ebf10f75da826122f3a0211d8824b6f3ff2bd5cac92798343855f82b4bb7fbdf59aebe1c7b46e9
