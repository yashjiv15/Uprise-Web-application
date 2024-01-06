<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href="src\java\login.java" />
  </head>

  <body>
    <nav>
      <div class="logo-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">menu</span>
          <span class="tooltip-text">Main Menu</span>
        </div>

        <img
          class="gb_uc gb_7d"
          src="img\notebook.png"
          srcset="
            img\notebook.png 1x,
            img\notebook.png 2x "
          
          alt=""
          aria-hidden="true"
          style="width: 40px; height: 40px;"
        />
        <span class="logo-text">Notepad</span>
      </div>

      <div class="search-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">search</span>
          <span class="tooltip-text">Search</span>
        </div>
        <input type="text" placeholder="Search" />
      </div>
      <div class="settings-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">refresh</span>
          <span class="tooltip-text">Refresh</span>
        </div>
        <div class="tooltip">
          <span class="material-icons-outlined hover">view_agenda</span>
          <span class="tooltip-text">List View</span>
        </div>
        <div class="tooltip">
          <span class="material-icons-outlined hover">settings</span>
          <span class="tooltip-text">Settings</span>
        </div>
          <div class="tooltip">
          <span class="material-icons-outlined hover">logout</span>
          <a href="Registration.html" <span class="tooltip-text">Log-out</span></a>
        </div>
      </div>
      <div class="profile-actions-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">apps</span>
          <span class="tooltip-text">Apps</span>
        </div>
        <div class="tooltip">             
        <span class="material-icons-outlined hover">account_circle</span>
        <span class="tooltip-text" >Account</span>
        </div>
      </div>
    </nav>
    <main>
      <div class="sidebar">
        <div class="sidebar-item">
          <span class="material-icons-outlined hover active">sticky_note_2</span>
          <span class="sidebar-text">Notes</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">notifications_active</span>
          <span class="sidebar-text">Reminders</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">edit</span>
          <span class="sidebar-text">Edit Labels</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">archive</span>
          <span class="sidebar-text">Archive</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">delete</span>
          <span class="sidebar-text">Trash</span>
        </div>
      </div>
      <div class="form-container">
          <form action="noteserv" method="POST">
              
          <input class="note-text" type="text" placeholder="Take a note..." />
          <div class="form-actions">
            <div class="tooltip">
              <span class="material-icons-outlined hover">check_box</span>
              <span class="tooltip-text">New List</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover">brush</span>
              <span class="tooltip-text">New Drawing</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover">image</span>
              <span class="tooltip-text">New Image</span>
            </div>
          </div>
        </form>
      </div>

      <div class="form-container active-form">
          <form action="noteserv" method="POST">
          <input type="text" class="note-title" name="title" placeholder="Title" />
          <input class="note-text" type="text" name="notes" placeholder="Take a note..." />
          <div class="form-actions">
            <div class="icons">
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >add_alert</span
                >
                <span class="tooltip-text">Remind me</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >person_add</span
                >
                <span class="tooltip-text">Collaborator</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >palette</span
                >
                <span class="tooltip-text">Change Color</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >image</span
                >
                <span class="tooltip-text">Add Image</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >archive</span
                >
                <span class="tooltip-text">Archive</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >more_vert</span
                >
                <span class="tooltip-text">More</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >undo</span
                >
                <span class="tooltip-text">Undo</span>
              </div>
              <div class="tooltip">
                <span class="material-icons-outlined hover small-icon"
                  >redo</span
                >
                <span class="tooltip-text">Redo</span>
              </div>
            </div>
            <button class="close-btn">Close</button>
          </div>
        </form>
      </div>

      <div class="notes">
        <div class="note">
          <span class="material-icons check-circle">check_circle</span>
          <div class="title">Go to notes</div>
          <div>
            <form action="notepad" method="POST">
                <table><tr>
                        <td><input class="title" name="title" placeholder="Press enter the title"></td>
              <span class="tooltip-text" >Account</span>
           </tr>   </table>
             </form>
          </div>
          <div class="note-footer">
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >add_alert</span
              >
              <span class="tooltip-text">Remind me</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >person_add</span
              >
              <span class="tooltip-text">Collaborator</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >palette</span
              >
              <span class="tooltip-text">Change Color</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >image</span
              >
              <span class="tooltip-text">Add Image</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >archive</span
              >
              <span class="tooltip-text">Archive</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover small-icon"
                >more_vert</span
              >
              <span class="tooltip-text">More</span>
            </div>
          </div>
        </div>
      </div>

      <div class="modal">
        <div class="modal-content">
          <div class="form-container active-form">
              <form action="noteserv" method="POST">
              <input type="text" class="note-title" placeholder="Title" />
              <input
                class="note-text"
                type="text"
                name="notes" 
                placeholder="Take a note..."
              />
              <div class="form-actions">
                <div class="icons">
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >add_alert</span
                    >
                    <span class="tooltip-text">Remind me</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >person_add</span
                    >
                    <span class="tooltip-text">Collaborator</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >palette</span
                    >
                    <span class="tooltip-text">Change Color</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >image</span
                    >
                    <span class="tooltip-text">Add Image</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >archive</span
                    >
                    <span class="tooltip-text">Archive</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >more_vert</span
                    >
                    <span class="tooltip-text">More</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >undo</span
                    >
                    <span class="tooltip-text">Undo</span>
                  </div>
                  <div class="tooltip">
                    <span class="material-icons-outlined hover small-icon"
                      >redo</span
                    >
                    <span class="tooltip-text">Redo</span>
                  </div>
                </div>
                  <a href="index.html">
                      <button class="close-btn">Close</button></a>
              </div>
              
              <div>


           
    </div>
     
            </form>
          </div>
        </div>
      </div>
        
    </main>
       <a href="Pass.html" style="border-radius: 4px;
  background-color: crimson;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  position: absolute;
  margin-left: 42%;
  text-decoration: none;" type="submit" class="button">Password Manager</a>  
  
  </body>
</html>
