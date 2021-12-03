FROM ubuntu:18.04


RUN apt-get update && apt-get -y upgrade
RUN useradd -d /home/task/ -m -p task -s /bin/bash task
RUN echo "task:task" | chpasswd

WORKDIR /home/task

COPY main .
COPY flag.txt .
COPY ynetd .
RUN chown -R root:root /home/task
RUN chmod 755 ynetd
RUN chmod 755 main
RUN chmod 755 flag.txt
RUN touch logged_users.txt
RUN chmod 777 logged_users.txt

USER task
CMD ./ynetd -p 1337 ./main
