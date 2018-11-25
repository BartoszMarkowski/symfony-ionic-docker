FROM node:10-slim

WORKDIR /app

RUN npm config set package-lock false && \
    npm install -g @angular/cli && \
    npm install -g ionic

CMD npm run start;bash
