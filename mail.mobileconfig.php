<?php
header('Content-Type: application/x-apple-aspen-config');
header('Content-Disposition: attachment; filename="mail.mobileconfig"');
?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<!--
 iOS/OS X Configuration Profile

 Mobileconfig for iOS/OS X users to setup IMAP, SMTP, Contacts & Calendar

 https://developer.apple.com/library/ios/featuredarticles/iPhoneConfigurationProfileRef/Introduction/Introduction.html
-->
<plist version="1.0">
<dict>
  <key>PayloadContent</key>
  <array>
    <dict>
      <key>EmailAddress</key>
      <string><?php echo $_GET['email'];?></string>
      <key>IncomingMailServerUsername</key>
      <string><?php echo $_GET['email'];?></string>
      <key>OutgoingMailServerUsername</key>
      <string><?php echo $_GET['email'];?></string>
      <key>EmailAccountDescription</key>
      <string>PRIMARY_HOSTNAME mail</string>
      <key>EmailAccountType</key>
      <string>EmailTypeIMAP</string>
      <key>IncomingMailServerAuthentication</key>
      <string>EmailAuthPassword</string>
      <key>IncomingMailServerHostName</key>
      <string>PRIMARY_HOSTNAME</string>
      <key>IncomingMailServerPortNumber</key>
      <integer>993</integer>
      <key>IncomingMailServerUseSSL</key>
      <true/>
      <key>OutgoingMailServerAuthentication</key>
      <string>EmailAuthPassword</string>
      <key>OutgoingMailServerHostName</key>
      <string>PRIMARY_HOSTNAME</string>
      <key>OutgoingMailServerPortNumber</key>
      <integer>587</integer>
      <key>OutgoingMailServerUseSSL</key>
      <true/>
      <key>OutgoingPasswordSameAsIncomingPassword</key>
      <true/>
      <key>PayloadDescription</key>
      <string>PRIMARY_HOSTNAME (IndieHosters)</string>
      <key>PayloadDisplayName</key>
      <string>PRIMARY_HOSTNAME mail</string>
      <key>PayloadIdentifier</key>
      <string>email.mailinabox.mobileconfig.PRIMARY_HOSTNAME.E-Mail</string>
      <key>PayloadOrganization</key>
      <string></string>
      <key>PayloadType</key>
      <string>com.apple.mail.managed</string>
      <key>PayloadUUID</key>
      <string>UUID2</string>
      <key>PayloadVersion</key>
      <integer>1</integer>
      <key>PreventAppSheet</key>
      <false/>
      <key>PreventMove</key>
      <false/>
      <key>SMIMEEnabled</key>
      <false/>
    </dict>
  </array>
  <key>PayloadDescription</key>
  <string>PRIMARY_HOSTNAME (IndieHosters)</string>
  <key>PayloadDisplayName</key>
  <string>PRIMARY_HOSTNAME</string>
  <key>PayloadIdentifier</key>
  <string>email.mailinabox.mobileconfig.PRIMARY_HOSTNAME</string>
  <key>PayloadOrganization</key>
  <string></string>
  <key>PayloadRemovalDisallowed</key>
  <false/>
  <key>PayloadType</key>
  <string>Configuration</string>
  <key>PayloadUUID</key>
  <string>UUID4</string>
  <key>PayloadVersion</key>
  <integer>1</integer>
</dict>
</plist>
