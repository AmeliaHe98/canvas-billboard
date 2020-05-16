# canvas billboard
## I. Set up the server
1. Configure IBM Virtual server
  * I configured mine with Public Multi-tenant, Compute C1.1X1, Ubuntu 18.04 LAMP. The rest is left to default. 
2. Configuring virtual servers using the following the following steps: https://cloud.ibm.com/docs/vsi?topic=virtual-servers-configuring-virtual-servers
3. Set up your VPN using the following steps: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-getting-started
4. Configure Standalone VPN clients using the following steps: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-standalone-vpn-clients. Here are available VPN endpoints: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-available-vpn-endpoints
5. Install Apache, MySQL, and PHP using the following steps: https://cloud.ibm.com/docs/tutorials?topic=solution-tutorials-lamp-stack#lamp-stack
6. Mount your virtual server remotely
  *. download fuse https://osxfuse.github.io
  *. SSHFS https://drive.google.com/file/d/0B0H_3AfXLqXLV3hnNjlDeS04STg/view
  *. create mount directory called linfuse
  *. fuser -c /path/linfuse
  *. sshfs name@private IP Address:/ /path/linfuse
7. In your /etc/apache2/mods-enabled/dir.conf, priortize index.php before index.html so public ip address pulls php 
## II. Set up Firebase
1. Create a Cloud Firestore database using the following steps: https://firebase.google.com/docs/firestore/quickstart
  *. Use 'app' as your collection ID, 'grid' as your document ID
2. Set up development enviornment using the following steps: https://firebase.google.com/docs/firestore/quickstart#set_up_your_development_environment
3. Go into Project Overview->Project Settings, and generate a new private key. Name the key creds.json and put it in your remote directory
## III. Set up code
1. Clone code from master
2. Create a folder "tmp/" and run chmod 777 tmp/
