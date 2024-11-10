<li class="nav-item has-treeview">
            <a href="#"
              class="nav-link <?php echo (strpos($current_route, 'Gestion des briefs') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-laptop-code"></i>
            
              <p>
                Validation des projets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/modules/pkg_validations/validation/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Réalisations') !== false) ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-laptop-code"></i>
                  <p>Validation </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/modules/pkg_validations/Formateur/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Réalisations') !== false) ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-laptop-code"></i>
                  <p>Validation 2</p>
                </a>
              </li>
            </ul>
</li>