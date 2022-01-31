# User Category

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
 Here I've implemented a form where all user can  create  id and give information about themselves.</br>
 



<a name="section-2"></a>
##Active Controllers

1.UserCategoryController.php




<a name="section-3"></a>
##Method

1.`function  store()`


```php
public function store(Request $request)
    {
        .....
        return redirect()->route('account.dashboard');
    }

```  

2.`function edit()`
```php
 public function edit(UserCategory $category)
    {
        return view('User-category.edit', compact('category'));
    }

``` 

3.`function update()`
```php
 public function update(Request $request, $id)
    {
      .....
        return redirect()->route('account.dashboard');
    }

```

4.`function destroy()`
```php

  public function destroy($id)
    {
        ....
        return redirect()->route('account.dashboard');
    }
```


<a name="section-4"></a>

##View-Route

| # | Request type   | Path | Action | Route name |
| : |   :-   |  :  | : | : |
| 1 | GET | category/{category}/edit  | edit | category.edit |
| 2 | POST | category  | store | category.store |
| 3 | PUT | category{id}  | update | User.update |
| 4 | DELETE | category{id}  | destroy | User.destroy |

<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result.</br>