<div class="add-task-container">
    <form class="col-12 d-flex justify-content-center flex-column"  method="post" autocomplet="off" action="inc/add.php">
    
          <input type="text" placeholder="ajoutez une tâche" name="newtask" class="form-control" required=required>
          
          <div class="d-flex">  
          
            <select name="priority" class="form-select form-select-sm" style="margin-top:0.5rem;" aria-label=".form-select">
            <option selected></option>
                  <option value="1">Haute</option>
                  <option value="2">Normale</option>
                  <option value="3">Faible</option>
      
            </select>
            <button type="submit" class="btn ms-2" style="font-size:18px; font-weight:bold; margin-top:0.5rem; width:8rem;background-color:#FFD717;"><span>&#43;</span></button>
            </div>
    </form>
    
  </div>
  