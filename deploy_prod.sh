bash $HOME/.nvm/nvm.sh

composer install

cd www-src
npm install
npm run build-prod
