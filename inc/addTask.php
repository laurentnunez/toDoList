<div class="add-task-container">
    <form class="col-12 d-flex justify-content-center flex-column"  method="post" autocomplet="off" action="inc/add.php">
    <div class="d-flex">
          <input type="text" placeholder="ajouter une tâche" name="newtask" class="form-control">
        
          <button type="submit" class="btn btn-info ms-1" style="font-size:17px; color:white; font-weight:bold;"><span>&#43;</span></button>   
      </div>
          
            <select name="priority" class="form-select form-select-sm" style="margin-top:0.5rem;" aria-label=".form-select">
            <option selected>sélectionez la priorité</option>
                  <option value="1">Haute</option>
                  <option value="2">Normale</option>
                  <option value="3">Faible</option>
      
            </select>
            
    </form>
  </div>