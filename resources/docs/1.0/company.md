# Employee Create

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
Here I've implemented a form where all employee can  create  id and give information about themselves.</br>



<a name="section-2"></a>
##Active Controllers

1.EmployeeController.php</br>




<a name="section-3"></a>
##Method

1.`function create()`


```php
 public function create()
    {
        .......
        return view('Employee.create', compact('categories'));
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
        return view('Employee.edit', compact('Employee', 'categories'));
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

5.`function validateEmployee()`
```php
protected function validateEmployee(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'phone number' => 'required',
            'password' => 'required|string',
            'cover_img' => 'sometimes|image|max:3999'
        ]);
    }

```

6.`function validateEmployeeUpdate()`
```php
protected function validateEmployeeUpdate(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'phone number' => 'required',
            'password' => 'required|string',
            'cover_img' => 'sometimes|image|max:3999'
        ]);
    }
```

7.`function employeeSave()`
```php
protected function employeeSave(employee $employee, Request $request)
    {
        .......
    }
```

8.`function employeeUpdate()`
```php
protected function employeeUpdate(employee $employee, Request $request)
    {
        .......
    }
```

9.`function getName()`
```php
  protected function getName($file)
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
| 1 | GET | employee/create  | create |employee.create |
| 2 | PUT | employee{id}  | update | employee.update |
| 3 | POST |employee  | store | employee.store |
| 4 | GET | employee/edit  | edit | employee.edit |
| 5 | DELETE | employee  | destroy | employee.destroy |

<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result.</br>