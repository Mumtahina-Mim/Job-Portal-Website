# Save Job

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
 Here i implement a form where all employer can  create  company and they post job or vacance.</br>
 They also can accept  apply application .</br>



<a name="section-2"></a>
##Active Controllers

1.savedJobController.php</br>




<a name="section-3"></a>
##Method

1.`function  index()`


```php
public function index()
    {
        .....
        return view('account.saved-job', compact('posts'));
    }
```    
  

2.` function store()` 
``` php
public function store($id)
    {
       ......
    }
 ``` 

3.` function destroy()` 
``` php
 public function destroy($id)
    {
        ......;
        return redirect()->route('savedJob.index');
    }
``` 




<a name="section-4"></a>

##View-Route

| # | Request type   | Path | Action | Route name |
| : |   :-   |  :  | : | : |
| 1 | GET | my-saved-jobs  | index | savedJob.index |
| 2 | GET | my-saved-jobs/{id}  | store | savedJob.store |
| 1 | DELETE | my-saved-jobs/{id}  | destroy | savedJob.destroy |


<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result.</br>