Установка PHP в Mac OS X

$ xcode-select -p
/Applications/Xcode.app/Contents/Developer

$ xcode-select —install

$ ruby -e "$(curl –fsSL
# https://raw.githubusercontent.com/Homebrew/install/master/install)"


$ brew install freetype jpeg libpng gd zlib


https://github.com/Homebrew/homebrew-dupes
https://github.com/Homebrew/homebrew-versions
https://github.com/Homebrew/homebrew-php







$ brew tap homebrew/dupes
$ brew tap homebrew/versions
$ brew tap homebrew/homebrew-php


$ brew tap
homebrew/dupeshomebrew/php
homebrew/versions

$ brew install php70
После установки PHP готов к работе.
$ php -v


# Homebrew sbin path
PATH=/usr/local/sbin:$PATH


$ ln -sfv /usr/local/opt/php70/*.plist ~/Library/LaunchAgents


$ launchctl load ~/Library/LaunchAgents/homebrew.mxcl.php70.plist


