# Company Create

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
 Here i implement a form where all employer can  create  company and they post job or vacance.</br>
 They also can edit any company name,title,feature etc .</br>
 They can delete any company name.



<a name="section-2"></a>
##Active Controllers

1.CompanyController.php</br>




<a name="section-3"></a>
##Method

1.`function create()`


```php
 public function create()
    {
        .......
        return view('company.create', compact('categories'));
    }
```  

2.`function store()`
```php
public function store(Request $request)
    {
       '......
        return redirect()->route('account.authorSection');
    }
``` 

3.`function edit()`
```php
 public function edit()
    {
        ...
        return view('company.edit', compact('company', 'categories'));
    }

```

4.`function update()`
```php

 public function update(Request $request, $id)
    {
        ...
        return redirect()->route('account.authorSection');
    }
```

5.`function validateCompany()`
```php
protected function validateCompany(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'logo' => 'required|image|max:2999',
            'category' => 'required',
            'website' => 'required|string',
            'cover_img' => 'sometimes|image|max:3999'
        ]);
    }

```

6.`function validateCompanyUpdate()`
```php
protected function validateCompanyUpdate(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'logo' => 'someiimes|image|max:2999',
            'category' => 'required',
            'website' => 'required|string',
            'cover_img' => 'sometimes|image|max:3999'
        ]);
    }
```

7.`function companySave()`
```php
protected function companySave(Company $company, Request $request)
    {
        .......
    }
```

8.`function companyUpdate()`
```php
protected function companyUpdate(Company $company, Request $request)
    {
        .......
    }
```

9.`function getFileName()`
```php
  protected function getFileName($file)
    {
        ...
        return $actualFileName . time() . '.' . $fileExtension;
    }
```

10.`function destroy()`
```php
public function destroy()
    {
        .....
        return redirect()->route('account.authorSection');
    }
```

<a name="section-4"></a>

##View-Route

| # | Request type   | Path | Action | Route name |
| : |   :-   |  :  | : | : |
| 1 | GET | company/create  | create | company.create |
| 2 | PUT | company{id}  | update | company.update |
| 3 | POST | company  | store | company.store |
| 4 | GET | company/edit  | edit | company.edit |
| 5 | DELETE | company  | destroy | company.destroy |

<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result and view those file in the view page.</br>
