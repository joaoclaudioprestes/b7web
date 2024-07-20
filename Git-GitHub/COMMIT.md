# ![Imagem](https://marklodato.github.io/visual-git-guide/commit-main.svg)

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

## 📚 Exemplo Completo

1. **Adicionar arquivos modificados:**

   ```bash
   git add .
   ```

2. **Criar um commit com uma mensagem descritiva:**

   ```bash
   git commit -m "Adiciona nova funcionalidade de login"
   ```

3. **Visualizar o histórico de commits:**

   ```bash
   git log
   ```

4. **Desfazer o último commit, mantendo as alterações:**

   ```bash
   git reset --soft HEAD~1
   ```
