## Entités

- User (Client/Vendeur/Admin)
    - name - varchar 255
    - surname - varchar 255
    - email - varchar 255
    - password - varchar 255
    - status (seller / client / admin) - array
- Category
    - name - varchar 255
- Article
    - title - varchar 255
    - content - text
    - author - relation authorID
    - status (published / drafted) - boolean
    - createdAt - dateTime
    - updatedAt - dateTime
- Product (ajouter UN SEUL paramètre personnalisé tel qu'une couleur, une marque etc.)
    - name - varchar 255
    - price - float
    - description - text
    - image - text
    - brand - varchar 255
    - stock - Int
    - status (published / drafted) - boolean
    - seller - relation Seller
    - category - relation Category
- Cart
    - product - relation Product
    - amount - Int

### Pages visitor

- Articles
    - view articles (3 derniers articles du plus récent au plus ancien)
- Products
    - view all products
    - Formulaire permettant de trier par :
        - prix
        - vendeur
        - catégorie
        - liste par défaut les articles des plus vieux au plus récent
        - doit aussi permettre d'ordonner par date de création (ASC ou DESC)
- Connection
- Create account

### Pages buyer

- Articles
    - view all articles
- Products
    - view products (name, description, image, price, seller, category, brand)
        - add to cart + quantity + brand
    - sort products
- Cart
    - Add product
    - Delete product
    - Change product quantity
    - Buy & empty cart
- Profile
    - name, surname, email, status (seller / buyer)
    - Edit profile (name, surname, email, status)
    - Edit password

### Pages seller

- Articles
    - view all articles
- Products
    - view products (name, description, image, price, seller, category, brand)
        - add to cart + quantity + brand
    - sort products
    - create product
    - modify product
    - delete product
- Cart
    - Add product
    - Delete product
    - Change product quantity
    - Buy & empty cart
- Profile
    - name, surname, email, status (seller / buyer), seller’s products
    - Edit profile (name, surname, email, status)
    - Edit password

### Pages admin (different header)

- Articles
    - view articles
    - sort articles (ASC / DESC)
    - create article
    - modify article
    - delete article
- Products
    - view products
    - sort products (ASC / DESC)
    - create product
    - modify product
    - delete product
- Categories
    - view categories
    - sort categories (ASC / DESC)
    - create categories
    - modify categories
    - delete categories
- User
    - List of Users
    - Dashboard stats products, categories & quantities
- Profile
    - name, surname, email, status, seller’s products
    - Edit profile (name, surname, email)
    - Edit password
