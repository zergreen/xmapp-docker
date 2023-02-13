# pull form xampp
FROM tomsik68/xampp

# directory after we go into container
WORKDIR /www

# copy all file
COPY . /www

COPY ./index.php /www

# excecute sql script (uncomment because this is image)
# RUN /opt/lampp/bin/mysql --user="root" --password="" < dump_script.sql 

RUN echo "Yup!"