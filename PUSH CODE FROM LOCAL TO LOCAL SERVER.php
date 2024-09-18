Windows PowerShell
Copyright (C) Microsoft Corporation. All rights reserved.

Try the new cross-platform PowerShell https://aka.ms/pscore6

PS C:\wamp64\www\mds-trackmate> ssh root@192.168.1.105
The authenticity of host '192.168.1.105 (192.168.1.105)' can't be established.
ECDSA key fingerprint is SHA256:rLcemla8Bu93uulPX8uQDEj5+Padkn3GfUNAZO/W2Ak.  
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
Warning: Permanently added '192.168.1.105' (ECDSA) to the list of known hosts.
root@192.168.1.105's password: 
Last login: Thu Aug 22 18:49:54 2024 from 192.168.1.231
[root@mds-linuxserver ~]# cd .. 
[root@mds-linuxserver /]# cd var
[root@mds-linuxserver var]# cd www
[root@mds-linuxserver www]# cd html
[root@mds-linuxserver html]# cd mds-trackemate-beta
-bash: cd: mds-trackemate-beta: No such file or directory
[root@mds-linuxserver html]# cd mds-trackmate-beta
[root@mds-linuxserver mds-trackmate-beta]# git pull http://192.168.1.105:81/gitlab-instance-98ff753d/mds-trackmate.git main
Username for 'http://192.168.1.105:81': mani
Password for 'http://mani@192.168.1.105:81':
remote: Enumerating objects: 27, done.
remote: Counting objects: 100% (24/24), done.
remote: Compressing objects: 100% (11/11), done.
remote: Total 13 (delta 10), reused 5 (delta 2), pack-reused 0
Unpacking objects: 100% (13/13), done.
From http://192.168.1.105:81/gitlab-instance-98ff753d/mds-trackmate
 * branch            main       -> FETCH_HEAD
Updating 80198d5..c3f812b
Fast-forward
 application/views/admin/branch/tab/branch_profile.php | 2 +-
 1 file changed, 1 insertion(+), 1 deletion(-)
[root@mds-linuxserver mds-trackmate-beta]#

------------------------------------------------------------------------------------------------------

SERVER PASSWORD: MDSr00t

MINE GITLAB CREDENTIALS:
USERNAME: mani
PASSWORD: Temp@123
