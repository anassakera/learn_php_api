## أوامر Git

1. `git init`: إنشاء مستودع Git جديد.
   
2. `git config --global user.name 'ANASS AKERA'`: تعيين اسم المستخدم العالمي لـ Git.
   
3. `git config --global user.email 'anassakera@gmail.com'`: تعيين البريد الإلكتروني العالمي لـ Git.
   
4. `git config --global --add safe.directory 'D:/Flutter/5 - build API with PHP/learn_php_api'`: إضافة دليل آمن لـ Git.
   
5. `git remote add origin https://github.com/anassakera/learn_php_api.git`: إضافة مستودع خارجي.
   
6. `git checkout -b my-new-branch`: إنشاء فرع جديد والانتقال إليه.
   
7. `git add .`: إضافة جميع التغييرات إلى منطقة الانتظار.
   
8. `git commit -m "1st commit PHP API FOR FLUTTER"`: تأكيد التغييرات مع رسالة الالتزام.
   
9. `git push -u origin my-new-branch`: دفع التغييرات إلى المستودع الخارجي في الفرع الجديد.

## إذا أردت تحديث ملفات المشروع إتبع الأوامر التالية :

```git
git add .
git commit -m "2ed commit PHP API FOR FLUTTER"
git push -u origin myNewBranch
```
## في حال واجهتك مشكلة قم بإنشاء فرع(branch) جديد :
```git
git checkout -b my-new-branch-name
git add .
git commit -m "New branch commit"
git push -u origin my-new-branch-name
```
