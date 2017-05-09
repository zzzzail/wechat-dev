#!/bin/bash
echo -e '开始切割log文件'
CURPATH=`pwd`
LOGPATH=$CURPATH/logs
LOGFILE=$LOGPATH/myapp.out
YESTERDAY=`date -d last-day '+%Y%m%d'`
logOfLastDay=$LOGPATH/'pm2-out-'$YESTERDAY'.log'
echo $logOfLastDay

exit 0