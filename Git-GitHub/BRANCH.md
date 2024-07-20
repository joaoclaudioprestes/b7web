# ![Imagem](https://miro.medium.com/v2/resize:fit:1280/0*DwEV5PHeTMsxQ--Z)

# 💾 Commit

Um commit no Git é uma "fotografia" do estado atual do seu projeto. Ele registra as alterações feitas e permite adicionar uma mensagem descritiva sobre essas mudanças. Os commits ajudam a manter um histórico detalhado das modificações, facilitando o rastreamento e a colaboração.

## 📋 Comandos Essenciais

1. **Adicionar arquivos para o commit:**

   ```bash
   git add <nome-do-arquivo>
   ```

   Para adicionar todos os arquivos modificados:

   ```bash
   git add .
   ```

2. **Criar um commit com uma mensagem descritiva:**

   ```bash
   git commit -m "Mensagem descritiva sobre as mudanças"
   ```

## 🚀 Exemplo Rápido

1. **Adicionar arquivos modificados:**

   ```bash
   git add .
   ```

2. **Criar um commit com uma mensagem:**

   ```bash
   git commit -m "Corrige bug na funcionalidade X"
   ```

3. **Visualizar o histórico de commits:**

   ```bash
   git log
   ```

   Isso mostrará uma lista de commits com suas mensagens, autores e IDs únicos.

## 📌 Detalhes Adicionais

- **Commits Atômicos:** É uma boa prática fazer commits atômicos, ou seja, commits que contêm mudanças relacionadas a uma única tarefa ou funcionalidade. Isso facilita o rastreamento e a reversão de mudanças específicas, se necessário.
  
- **Mensagens de Commit:** As mensagens de commit devem ser claras e descritivas, explicando o que foi alterado e, se necessário, por que a mudança foi feita.

## 🔄 Undo Commit

Se você precisar desfazer o último commit, mantendo as alterações no seu diretório de trabalho:

   ```bash
   git reset --soft HEAD~1
   ```

Se você precisar desfazer o último commit e descartar as alterações:

   ```bash
   git reset --hard HEAD~1
   ```

## 🌍 Push e Pull

1. **Enviar commits para o repositório remoto (Push):**

   Depois de fazer commits locais, você pode enviá-los para o repositório remoto para compartilhar suas mudanças com outros colaboradores:

   ```bash
   git push origin <nome-da-branch>
   ```

   Isso atualiza o repositório remoto com os commits feitos na branch especificada.

2. **Obter as últimas mudanças do repositório remoto (Pull):**

   Para atualizar seu repositório local com as últimas mudanças do repositório remoto, use:

   ```bash
   git pull origin <nome-da-branch>
   ```

   Isso baixa e mescla as alterações do repositório remoto na branch atual.

## 📚 Exemplo Completo

1. **Adicionar arquivos modificados:**

   ```bash
   git add .
   ```

2. **Criar um commit com uma mensagem descritiva:**

   ```bash
   git commit -m "Adiciona nova funcionalidade de login"
   ```

3. **Enviar commits para o repositório remoto:**

   ```bash
   git push origin main
   ```

4. **Obter as últimas mudanças do repositório remoto:**

   ```bash
   git pull origin main
   ```

5. **Visualizar o histórico de commits:**

   ```bash
   git log
   ```

6. **Desfazer o último commit, mantendo as alterações:**

   ```bash
   git reset --soft HEAD~1
   ```

Os commits, junto com os comandos de `push` e `pull`, são fundamentais para manter um histórico organizado e sincronizado do seu projeto, permitindo uma colaboração eficaz e a gestão das alterações realizadas.
