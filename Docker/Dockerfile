# Define a imagem base
FROM node:14-alpine

# Define o diretório de trabalho dentro do container
WORKDIR /app

# Copia o package.json e o package-lock.json para o diretório de trabalho
COPY package*.json ./

# Instala as dependências do projeto
RUN npm install

# Copia o restante dos arquivos do projeto para o diretório de trabalho
COPY . .

# Define a porta em que o servidor irá escutar
EXPOSE 3000

# Comando para iniciar o servidor
CMD ["npm", "start"]
