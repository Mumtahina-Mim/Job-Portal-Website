# Job

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
 Here I implement a form , where all employers can  create  company and they post job or vacance.</br>
 They also can accept  apply application .</br>



<a name="section-2"></a>
##Active Controllers

1.JobController.php




<a name="section-3"></a>
##Method

1.`function  index()`


```php
public function index()
    {
        return view('job.index');
    }
```    
  

2.` function search()` 
``` php
public function search(Request $request)
    {
       ....
        return $posts->toJson();
    }
 ``` 

3.` function getCategories()` 
``` php
 public function getCategories()
    {
        ....
        return $categories->toJson();
    }
``` 

4.` function getAllOrganization()`
``` php

 public function getAllOrganization()
    {
        ....
        return $companies->toJson();
    }
``` 

5.` function getAllByTitle()` 
``` php
public function getAllByTitle()
    {
        ....
        return $posts->toJson();
    }
``` 


<a name="section-4"></a>

##View-Route

| # | Request type   | Path | Action | Route name |
| : |   :-   |  :  | : | : |
| 1 | GET | /search  | index | job.index |


<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result.</br>