# update all packages to the latest minor and patch version

# check all updates and update them
npx --yes npm-check-updates --packageManager pnpm --target minor -u

# install dependencies
pnpm i
