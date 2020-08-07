# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'fingerprint.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!


from PyQt5 import QtCore, QtGui, QtWidgets
from Finger import Finger
import time


class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(800, 600)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.btnsendttermina = QtWidgets.QPushButton(self.centralwidget)
        self.btnsendttermina.setGeometry(QtCore.QRect(190, 360, 171, 26))
        self.btnsendttermina.setObjectName("btnsendttermina")
        self.lineEdit = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit.setGeometry(QtCore.QRect(300, 280, 113, 26))
        self.lineEdit.setText("")
        self.lineEdit.setObjectName("lineEdit")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(80, 260, 57, 16))
        self.label.setObjectName("label")
        self.label_2 = QtWidgets.QLabel(self.centralwidget)
        self.label_2.setGeometry(QtCore.QRect(290, 60, 131, 16))
        self.label_2.setObjectName("label_2")
        self.label_3 = QtWidgets.QLabel(self.centralwidget)
        self.label_3.setGeometry(QtCore.QRect(330, 100, 57, 16))
        self.label_3.setObjectName("label_3")
        self.lineport = QtWidgets.QLineEdit(self.centralwidget)
        self.lineport.setGeometry(QtCore.QRect(300, 130, 113, 26))
        self.lineport.setObjectName("lineport")
        self.label_4 = QtWidgets.QLabel(self.centralwidget)
        self.label_4.setGeometry(QtCore.QRect(320, 180, 61, 20))
        self.label_4.setObjectName("label_4")
        self.linebrate = QtWidgets.QLineEdit(self.centralwidget)
        self.linebrate.setGeometry(QtCore.QRect(300, 210, 113, 26))
        self.linebrate.setObjectName("linebrate")
        self.label_5 = QtWidgets.QLabel(self.centralwidget)
        self.label_5.setGeometry(QtCore.QRect(60, 60, 131, 16))
        self.label_5.setObjectName("label_5")
        self.linelocation = QtWidgets.QLineEdit(self.centralwidget)
        self.linelocation.setGeometry(QtCore.QRect(60, 130, 113, 26))
        self.linelocation.setObjectName("linelocation")
        self.label_6 = QtWidgets.QLabel(self.centralwidget)
        self.label_6.setGeometry(QtCore.QRect(70, 100, 57, 16))
        self.label_6.setObjectName("label_6")
        self.label_7 = QtWidgets.QLabel(self.centralwidget)
        self.label_7.setGeometry(QtCore.QRect(80, 180, 57, 16))
        self.label_7.setObjectName("label_7")
        self.linepoid = QtWidgets.QLineEdit(self.centralwidget)
        self.linepoid.setGeometry(QtCore.QRect(60, 210, 113, 26))
        self.linepoid.setObjectName("linepoid")
        self.lineamount = QtWidgets.QLineEdit(self.centralwidget)
        self.lineamount.setGeometry(QtCore.QRect(60, 290, 113, 26))
        self.lineamount.setObjectName("lineamount")
        self.btnclear = QtWidgets.QPushButton(self.centralwidget)
        self.btnclear.setGeometry(QtCore.QRect(480, 120, 131, 26))
        self.btnclear.setObjectName("btnclear")
        self.label_8 = QtWidgets.QLabel(self.centralwidget)
        self.label_8.setGeometry(QtCore.QRect(630, 90, 57, 16))
        self.label_8.setObjectName("label_8")
        self.label_9 = QtWidgets.QLabel(self.centralwidget)
        self.label_9.setGeometry(QtCore.QRect(720, 90, 57, 16))
        self.label_9.setObjectName("label_9")
        self.linefrom = QtWidgets.QLineEdit(self.centralwidget)
        self.linefrom.setGeometry(QtCore.QRect(630, 120, 41, 26))
        self.linefrom.setObjectName("linefrom")
        self.lineto = QtWidgets.QLineEdit(self.centralwidget)
        self.lineto.setGeometry(QtCore.QRect(710, 120, 41, 26))
        self.lineto.setObjectName("lineto")
        self.txtmessage = QtWidgets.QTextEdit(self.centralwidget)
        self.txtmessage.setGeometry(QtCore.QRect(470, 190, 291, 121))
        self.txtmessage.setObjectName("txtmessage")
        self.btnenrol = QtWidgets.QPushButton(self.centralwidget)
        self.btnenrol.setGeometry(QtCore.QRect(410, 360, 151, 26))
        self.btnenrol.setObjectName("btnenrol")
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 800, 24))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.btnsendttermina.setText(_translate("MainWindow", "Authenticate"))
        self.label.setText(_translate("MainWindow", "Amount"))
        self.label_2.setText(_translate("MainWindow", "Fingerprint settings"))
        self.label_3.setText(_translate("MainWindow", "Port"))
        self.label_4.setText(_translate("MainWindow", "b-rate"))
        self.label_5.setText(_translate("MainWindow", "Pos Information"))
        self.label_6.setText(_translate("MainWindow", "Location"))
        self.label_7.setText(_translate("MainWindow", "Pos ID"))
        self.btnclear.setText(_translate("MainWindow", "Clear fingerprints"))
        self.label_8.setText(_translate("MainWindow", "From"))
        self.label_9.setText(_translate("MainWindow", "To"))
        self.btnenrol.setText(_translate("MainWindow", "Enrol Fingerprint"))
        self.btnsendttermina.clicked.connect(self.on_click)
        self.btnclear.clicked.connect(self.delete)

    
   

    def on_click(self):
        self.txtmessage.clear

        port = self.lineport.text()
        ttl = self.linebrate.text()

        if(port != "" and ttl != ""):
            try :
                f=Finger(port,ttl,self.linelocation.text() ,self.linepoid.text(),self.lineamount.text())  

                self.txtmessage.clear
                self.txtmessage.setText("Scan finger print")
                time.sleep(2)
                
                # print("MainWindow")
                
                
                

                
                if (str(f.match) != "-1"):
                  

                    self.txtmessage.setText("Finger value:"+str(f.match()))
                    # msg = QtWidgets.QMessageBox()
                    # msg.setIcon(QtWidgets.QMessageBox.Information)
                    # msg.setText("Success")
                    # msg.setInformativeText('Fingerprint verified')
                    # msg.setWindowTitle("Finger Found at:"+str(f.match()))
                    # msg.exec_()
            except Exception as err:
                self.txtmessage.setText("Error Encountered \n"+str(err))
        elif (self.linelocation.text() ==  ""):
            self.txtmessage.setText("Enter Location")
        elif (self.linepoid.text() ==  ""):
            self.txtmessage.setText("Enter Pos ID")
        elif (self.lineamount.text() ==  ""):
            self.txtmessage.setText("Enter Amount")

        else:
            self.txtmessage.setText("fill in com port and baud rate clear\n eg /dev/ttyUSB0 ")
    def delete(self):
        port = self.lineport.text()
        ttl = self.linebrate.text()
        
        try :
            f=Finger(port,ttlm,0,0,0)  
            if self.linefrom.text() != "" and self.lineto.text() != "" :
                fid=self.linefrom.text()
                n=self.lineto.text()
                f.delete(fid,n)
                self.txtmessage.setText(" Fingerprint(s) Successfully Deleted ")
            else :
                self.txtmessage.setText("fill in from and to sections to clear")

        except Exception as err:
                self.txtmessage.setText("Error Encountered \n"+str(err))

        


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())
