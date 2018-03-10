FROM nginx

COPY nginx.conf /etc/nginx/nginx.conf
COPY webserver.conf /etc/nginx/conf.d/

RUN rm /etc/nginx/conf.d/default.conf
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
