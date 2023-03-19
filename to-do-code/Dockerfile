# Base image
FROM node:14-alpine

# Set the working directory
WORKDIR /app

# Copy the package.json and package-lock.json files and install dependencies
COPY package*.json ./
RUN npm install

# Copy the source code
COPY . .

# Build the app
RUN npm run build

# Expose the port on which the app will run
EXPOSE 3000

# Start the app
CMD ["npm", "start"]