# Path

Package For Getting Division, District and SubDistrict Name (Bangladesh)

## Usage

```php
use ShakilAhmmed\Path\Path;
```
###### সকল  বিভাগের জন্য 
```php
Path::getDivisions();
```

###### সকল  বিভাগের জন্য (বাংলায়)
```php
Path::getDivisions('bn');
```
###### সকল  বিভাগের জন্য (ইংরেজিতে)
```php
Path::getDivisions('en');
```


###### একটি বিভাগের জন্য 
```php
Path::getSingleDivision('dhaka' , 'bn'); //(বাংলায়)
Path::getSingleDivision('chittagong'); // ইংরেজিতে
```


###### সকল  জেলার জন্য 
```php
Path::getDistricts();
```

###### সকল  জেলার জন্য (বাংলায়)
```php
Path::getDistricts('bn');
```
###### সকল  জেলার জন্য (ইংরেজিতে)
```php
Path::getDistricts('en');
```

###### একটি বিভাগের সব জেলার জন্য  (বাংলায়)
```php
Path::getDivisionWiseDistrict('dhaka' , 'bn');
```


###### একটি বিভাগের সব জেলার জন্য  (ইংরেজিতে)
```php
Path::getDivisionWiseDistrict('dhaka');
```