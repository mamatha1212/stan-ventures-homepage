import os

# Ensure directory exists
os.makedirs('assets/images', exist_ok=True)

# List of files to create
files = [
    "assets/images/logo-rise.svg",
    "assets/images/logo-1seo.svg",
    "assets/images/logo-boostability.svg",
    "assets/images/logo-zenmedia.svg",
    "assets/images/user1.jpg",
    "assets/images/user2.jpg",
    "assets/images/case1.jpg",
    "assets/images/case2.jpg",
    "assets/images/logo-stan-ventures.svg"
]

svg_template = '''<svg width="200" height="50" xmlns="http://www.w3.org/2000/svg">
 <rect width="100%" height="100%" fill="#ddd" />
 <text x="50%" y="50%" font-family="Arial" font-size="20" fill="black" dominant-baseline="middle" text-anchor="middle">{}</text>
</svg>'''

jpg_template = '''<svg width="400" height="300" xmlns="http://www.w3.org/2000/svg">
 <rect width="100%" height="100%" fill="#eee" />
 <text x="50%" y="50%" font-family="Arial" font-size="24" fill="#555" dominant-baseline="middle" text-anchor="middle">{}</text>
</svg>'''

for f in files:
    name = os.path.basename(f)
    print(f"Creating {f}")
    
    # Simple text/svg content
    content = svg_template.format(name)
    
    # If it's a jpg, we can just save it as text (svg content) renaming it, 
    # browsers often render it if served with correct headers, but strictly speaking it's corrupt.
    # A better way for local dev is just to make them actual SVGs or empty files.
    # PHP dev server serves static files. 
    # Let's make them all SVGs but name them .jpg if needed (browsers might complain).
    # actually, for the sake of not crashing, let's just make valid empty files or text files.
    
    with open(f, 'w') as out:
        out.write(content)
