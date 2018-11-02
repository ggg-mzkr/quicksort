# quicksort
数列を受け取り、クイックソートを使ってソートした結果と、かかった時間を表示します。
```
-> % ./quicksort 5 1 6 7 65 45 23452 59023 -8495 0283490 -52834 0 1 4 5 45 234 52 452 -43 24 2 54352 95083420 45823940
-52834 -8495 -43 0 1 1 2 4 5 5 6 7 24 45 45 52 65 234 452 23452 54352 59023 0283490 45823940 95083420
result:0.001413sec
```

# Dependency
- php

# Setup
```
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.2
```

# Usage
コマンドライン引数で数列を渡してください。

```
-> % ./quicksort 5 1 6 7 65 45 23452 59023 -8495 0283490 -52834 0 1 4 5 45 234 52 452 -43 24 2 54352 95083420 45823940
-52834 -8495 -43 0 1 1 2 4 5 5 6 7 24 45 45 52 65 234 452 23452 54352 59023 0283490 45823940 95083420
result:0.001413sec
```



# Licence
This software is released under the MIT License, see LICENSE.

# Authors
堀内哲煕

# References
- https://ja.wikipedia.org/wiki/クイックソート
