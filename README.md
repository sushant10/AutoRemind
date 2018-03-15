# AutoRemind
[![License](https://img.shields.io/badge/License-Apache%202.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)

Small simple script to remind my friend to take her pills at specific times.
Run as a cron job 

Cron job example (Runs at 8am everyday) :
```
0 08 * * *  cd ~/Documents/AutoRemind/ && php Remind_friend.php
│  │ │ │ │
│  │ │ │ └─── day of week (0 - 6) (0 to 6 are Sunday to Saturday, or use names; 7 is Sunday, the same as 0)
│  │ │ └──────── month (1 - 12)
│  │ └───────────── day of month (1 - 31)
│  └────────────────── hour (0 - 23)
└─────────────────────── min (0 - 59)
```

