# Vidicial DNC-WASH 
Tested with Vicidial 8.0.1 | VERSION: 2.14-739a | BUILD: 200310-1801
#Getting Started
<ul>
  <li>Clone this project into /srv/www/</li>
  <li>chmod -R 777 /srv/www/htdocs/DNC-WASH/dnc-files/</li>
  <li>Upload any dnc file from https://telemarketing.donotcall.gov/ to /dnc-files by ftp</li>
  <li>Run from web http(s)://domain.com/DNC-WASH/dnc-upload.php or </Li>
  <li>Create a cron service</li>
  <li>59 23 * * * php  /srv/www/htdocs/DNC-WASH/dnc-update.php</li>
  <li>30 05 1 * * php  /srv/www/htdocs/DNC-WASH/dnc-upload.php</li>
  <li>All files uploaded will be deleted when system finish the import process</li>
</ul>
