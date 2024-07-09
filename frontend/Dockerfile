# Dockerfile for Vue.js
FROM node:14-alpine

# Create app directory
WORKDIR /app

# Install app dependencies
COPY package*.json ./
RUN npm install

# Bundle app source
COPY . .

# Expose port and start application
EXPOSE 8080
CMD ["npm", "run", "serve"]
