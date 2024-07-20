# ![Imagem](https://miro.medium.com/v2/resize:fit:1280/0*DwEV5PHeTMsxQ--Z)

# 🌿 Branch

No Git, uma branch (ramificação) é uma linha separada de desenvolvimento. Ela permite que você trabalhe em novas funcionalidades, correções de bugs ou experimentos sem afetar a versão principal do projeto.

## 🌱 Criar uma Nova Branch

Para criar uma nova branch, use:

```bash
git branch <nome-da-branch>
```

## 🔄 Mudar para Outra Branch

Para mudar para uma branch diferente, use:

```bash
git checkout <nome-da-branch>
```

## 🆕 Criar e Mudar para uma Nova Branch

Para criar uma nova branch e mudar para ela imediatamente, use:

```bash
git checkout -b <nome-da-nova-branch>
```

## 📜 Visualizar Branches

Para ver todas as branches do repositório, use:

```bash
git branch
```

A branch atual será marcada com um asterisco (*).

## 🔀 Mesclar Branches

Para mesclar uma branch na branch atual, primeiro mude para a branch de destino:

```bash
git checkout master
```

Em seguida, mescle a branch desejada:

```bash
git merge <nome-da-branch>
```

## 🗑️ Excluir uma Branch

Para excluir uma branch que você não precisa mais, use:

```bash
git branch -d <nome-da-branch>
```

## 📝 Exemplo Prático

1. **Criar e mudar para uma nova branch:**

   ```bash
   git checkout -b nova-funcionalidade
   ```

2. **Fazer alterações e criar commits na nova branch:**

   ```bash
   git add .
   git commit -m "Implementa nova funcionalidade"
   ```

3. **Voltar para a branch principal e mesclar as alterações:**

   ```bash
   git checkout master
   git merge nova-funcionalidade
   ```

4. **Excluir a branch antiga:**

   ```bash
   git branch -d nova-funcionalidade
   ```

