# 1. Git configuration Commands


## 1. git config --global user.name
**Syntax**
git config --global user.name "Your Name"
**purpose:**
sets the global username for Git commits.
**Example**
git config -- global user.name "Nandini"

## 2. git config --global user.email
**Syntax**
git config --global user.email "Your email"
**purpose:**
sets your  email for Git commits.
**Example**
git config -- global user.email "sivanandini445@gmail.com"

## 3. git config --list
**Syntax**
git config --list
**purpose:**
Dispalys all git configuration settings.
**Example**
git config --list

## 4. git config --unset user.name
**Syntax**
git config --unset user.name 
**purpose:**
Removes a configuration value.
**Example**
git config --unset user.name 
git config --global --unset user.email (removes globally)
**Screenshot**
![git config](screenshots\ConfigImg.png)




# 2.Repository Setup Commands


## 5. git init
**Syntax**
git init
**purpose:**
Creates a new repository in current folder
It initializes a new Git Repo by creating hidden .git directory
If .git is already exists it will Reinitializes existing Git repository
**Example**
git  init

## 6. git clone
**Syntax**
git clone <repository-url>
**purpose:**
Copies a remote repository to your local machine
**Example**
git clone https://github.com/Rakesh-18112006/Rakesh-18112006.github.io.git

## 7. git clone --branch
**Syntax**
git clone --branch  branch-name <url>
**purpose:**
clones a specific branch only
**Example**
git clone --branch main https://github.com/Rakesh-18112006/PHP-RGUKT-WT-LABS.git

## 8. git clone --depth 
**Syntax**
git clone --depth 1 <url>
**purpose:**
Shallow clone, downloads only the latest commit, when repo is very large & you only need latest code.
**Example**
git clone --depth 1 https://github.com/Rakesh-18112006/ESP-Website.git
**Screenshot**
![git clone](screenshots\Clone.png)



# 3. Repository Status & Inspection

## 9. git status
**Syntax**
git status
**purpose:**
Shows current working directory status.
**Example**
git status
**Screenshot**
![git status](screenshots\GitStatus.png)

## 10. git log
**Syntax**
git log
**purpose:**
Shows complete commit history
**Example**
git log
**Screenshot**
![git log](screenshots\Git_log.png)

## 11. git log --oneline
**Syntax**
git log --oneline
**purpose:**
Shows compact commit history.
**Example**
git log --oneline
**Screenshot**
![git clone](screenshots\Gitdiff.png)

## 12. git diff
**Syntax**
git diff
**purpose:**
Shows differences between working directory and last commit.
**Example**
git diff

**Screenshot**
![git clone](screenshots\Gitdiff.png)

