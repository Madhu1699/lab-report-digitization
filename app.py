import os
from flask import Flask, render_template, request

# import our OCR function
from ocr_processing import file_processing

# define a folder to store and later serve the images
#UPLOAD_FOLDER = 'C:/Users/SURAJ/Downloads/sarang_project/Mini_Project/static/uploads/'

# allow files of a specific type
ALLOWED_EXTENSIONS = set(['png', 'jpg', 'jpeg'])

app = Flask(__name__)

# function to check the file extension
def allowed_file(filename):
    return '.' in filename and \
           filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

# route and function to handle the upload page
@app.route('/', methods=['GET', 'POST'])
def upload_page():
    if request.method == 'POST':
        # check if there is a file in the request
        if 'file' not in request.files:
            return render_template('upload.html', msg='No file selected')
        file = request.files['file']
        # if no file is selected
        if file.filename == '':
            return render_template('upload.html', msg='No file selected')

        if file and allowed_file(file.filename):

            # call the OCR function on it
            extracted_text = file_processing(file)

            # extract the text and display it
            return render_template('upload.html',
                                   msg='Result',
                                   extracted_text=extracted_text)
    elif request.method == 'GET':
        return render_template('upload.html')

if __name__ == '__main__':
    app.run()