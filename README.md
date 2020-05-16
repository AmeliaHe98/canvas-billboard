# canvas billboard
## I. Set up the server
1. Buy Domain name, I used GoDaddy
2. Configure IBM Virtual server
  A. I configured mine with Public Multi-tenant, Compute C1.1X1, Ubuntu 18.04 LAMP. The rest is left to default. 
3.Go to your domain DNS Management, and change Type A Name @'s Value to your public IP Address
4.Configuring virtual servers using the following the following steps: https://cloud.ibm.com/docs/vsi?topic=virtual-servers-configuring-virtual-servers
5. Set up your VPN using the following steps: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-getting-started
6. Configure Standalone VPN clients using the following steps: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-standalone-vpn-clients. Here are available VPN endpoints: https://cloud.ibm.com/docs/iaas-vpn?topic=iaas-vpn-available-vpn-endpoints
7. Install Apache, MySQL, and PHP using the following steps: https://cloud.ibm.com/docs/tutorials?topic=solution-tutorials-lamp-stack#lamp-stack
8. Mount your virtual server remotely
  A. download fuse https://osxfuse.github.io
  B. SSHFS https://drive.google.com/file/d/0B0H_3AfXLqXLV3hnNjlDeS04STg/view
  C. create mount directory called linfuse
  D. fuser -c /path/linfuse
  E. sshfs name@private IP Address:/ /path/linfuse
9. In your /etc/apache2/mods-enabled/dir.conf, priortize index.php before index.html so public ip address pulls php 
10. 
