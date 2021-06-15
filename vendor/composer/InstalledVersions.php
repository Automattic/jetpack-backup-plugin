<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'automattic/jetpack-backup',
  ),
  'versions' => 
  array (
    'automattic/jetpack-a8c-mc-stats' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.4.x-dev',
      ),
      'reference' => 'c922996fa6d50ef7288e3022c1531f20869aea86',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.11.x-dev',
      ),
      'reference' => 'bd0e49700afef81db5bd04e9c0948956e1d89262',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => 'v2.10.3',
      'version' => '2.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aab966d6f2c8fd6669d6f5b1378d8ced5fd665b4',
    ),
    'automattic/jetpack-backup' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'automattic/jetpack-config' => 
    array (
      'pretty_version' => 'v1.4.6',
      'version' => '1.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '98f8080550901a8a29daf466ee75a4906c5f1ef0',
    ),
    'automattic/jetpack-connection' => 
    array (
      'pretty_version' => 'v1.28.0',
      'version' => '1.28.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bd8cc3ced95028721cd4e59399c6ac85d8341c4',
    ),
    'automattic/jetpack-connection-ui' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2a1fa5c500f465d16625bfeddf72e180270cb3c3',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.6.x-dev',
      ),
      'reference' => '4af9f14f6a08c81318d4067b891ef610f343b963',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.4.x-dev',
      ),
      'reference' => '68a5cff39e5295fecbc20d36812364fa38b9771c',
    ),
    'automattic/jetpack-heartbeat' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.3.x-dev',
      ),
      'reference' => '61ace4b3610758699836e73aec6437886458ac89',
    ),
    'automattic/jetpack-identity-crisis' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '0.1.x-dev',
      ),
      'reference' => '1eb72f5a0f7ef1e4e8c72a416f39e1a9de2a059b',
    ),
    'automattic/jetpack-logo' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.5.x-dev',
      ),
      'reference' => 'fded849729d28f06f5db6c986fc64a17a320b213',
    ),
    'automattic/jetpack-options' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.13.x-dev',
      ),
      'reference' => 'de833a41411fb82163b4c08a52d3471c294b60cc',
    ),
    'automattic/jetpack-password-checker' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '0.1.x-dev',
      ),
      'reference' => 'dec6ead3b3b26af31d8d46a608e97f4251cb036a',
    ),
    'automattic/jetpack-redirect' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.6.x-dev',
      ),
      'reference' => '3b8e138b90448c4c537dbdd205d8b01adf0c2a6d',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.4.x-dev',
      ),
      'reference' => 'bde868c2636fca7fca76b29a7df23fcd437481fc',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.8.x-dev',
      ),
      'reference' => '4a1ba2a67535fb016333d45dd16acdd6727fc99f',
    ),
    'automattic/jetpack-sync' => 
    array (
      'pretty_version' => 'v1.22.0',
      'version' => '1.22.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fdfb641bcbdb5d8ee3017a5df438f29b30e7eee9',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.9.x-dev',
      ),
      'reference' => '59f0b86b1266b57bf1265ec53034ff4f68cca285',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.13.x-dev',
      ),
      'reference' => '4b86a2dbf128dff3f57cbbeb210d916a09ccdf61',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
