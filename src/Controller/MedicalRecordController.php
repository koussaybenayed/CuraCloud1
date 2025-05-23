<?php

namespace App\Controller;

use App\Entity\MedicalRecord;
use App\Form\MedicalRecordType;
use App\Repository\MedicalRecordRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class MedicalRecordController extends AbstractController
{
    // Admin Routes
    #[Route('doctor/medical/record/', name: 'admin_medical_record_index', methods: ['GET'])]
    public function indexAdmin(MedicalRecordRepository $medicalRecordRepository): Response
    {
        $userId= $this->getUser();

        return $this->render('BackOffice/medical_record/index.html.twig', [
            'medical_records' => $medicalRecordRepository->findByPatientId($userId),
        ]);
    }

    #[Route('doctor/medical/record/new', name: 'admin_medical_record_new', methods: ['GET', 'POST'])]
    public function newAdmin(Request $request, EntityManagerInterface $entityManager): Response
    {
        $medicalRecord = new MedicalRecord();
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        $form = $this->createForm(MedicalRecordType::class, $medicalRecord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($medicalRecord);
            $entityManager->flush();

            return $this->redirectToRoute('admin_medical_record_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('BackOffice/medical_record/new.html.twig', [
            'medical_record' => $medicalRecord,
            'form' => $form,
        ]);
    }

    #[Route('doctor/medical/record/{id}', name: 'admin_medical_record_show', methods: ['GET'])]
    public function showAdmin(MedicalRecord $medicalRecord): Response
    {
        return $this->render('BackOffice/medical_record/show.html.twig', [
            'medical_record' => $medicalRecord,
        ]);
    }

    #[Route('doctor/medical/record/{id}/edit', name: 'admin_medical_record_edit', methods: ['GET', 'POST'])]
    public function editAdmin(Request $request, MedicalRecord $medicalRecord, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MedicalRecordType::class, $medicalRecord);
        $form->handleRequest($request);
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_medical_record_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('BackOffice/medical_record/edit.html.twig', [
            'medical_record' => $medicalRecord,
            'form' => $form,
        ]);
    }

    #[Route('doctor/medical/record/{id}/delete', name: 'admin_medical_record_delete', methods: ['POST'])]
    public function deleteAdmin(Request $request, MedicalRecord $medicalRecord, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        if ($this->isCsrfTokenValid('delete'.$medicalRecord->getId(), $request->request->get('_token'))) {
            $entityManager->remove($medicalRecord);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_medical_record_index', [], Response::HTTP_SEE_OTHER);
    }

    // User Routes
    #[Route('/patient/medical/record/', name: 'user_medical_record_index', methods: ['GET'])]
    public function indexUser(MedicalRecordRepository $medicalRecordRepository): Response{
        $userId= $this->getUser();
        return $this->render('FrontOffice/medical_record/index.html.twig', [
            'medical_records' => $medicalRecordRepository->findByPatientId($userId),
        ]);
    }

    #[Route('/patient/medical/record/new', name: 'user_medical_record_new', methods: ['GET', 'POST'])]
    public function newUser(Request $request, EntityManagerInterface $entityManager): Response
    {
        $medicalRecord = new MedicalRecord();
        $form = $this->createForm(MedicalRecordType::class, $medicalRecord);
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($medicalRecord);
            $entityManager->flush();

            return $this->redirectToRoute('user_medical_record_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/medical_record/new.html.twig', [
            'medical_record' => $medicalRecord,
            'form' => $form,
        ]);
    }

    #[Route('/patient/medical/record/{id}', name: 'user_medical_record_show', methods: ['GET'])]
    public function showUser(MedicalRecord $medicalRecord): Response
    {
        return $this->render('FrontOffice/medical_record/show.html.twig', [
            'medical_record' => $medicalRecord,
        ]);
    }

    #[Route('/patient/medical/record/{id}/edit', name: 'user_medical_record_edit', methods: ['GET', 'POST'])]
    public function editUser(Request $request, MedicalRecord $medicalRecord, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MedicalRecordType::class, $medicalRecord);
        $form->handleRequest($request);
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('user_medical_record_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/medical_record/edit.html.twig', [
            'medical_record' => $medicalRecord,
            'form' => $form,
        ]);
    }

    #[Route('/patient/medical/record/{id}/delete', name: 'user_medical_record_delete', methods: ['POST'])]
    public function deleteUser(Request $request, MedicalRecord $medicalRecord, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $medicalRecord->setIdPatient($user);
        if ($this->isCsrfTokenValid('delete'.$medicalRecord->getId(), $request->request->get('_token'))) {
            $entityManager->remove($medicalRecord);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_medical_record_index', [], Response::HTTP_SEE_OTHER);
    }
}
